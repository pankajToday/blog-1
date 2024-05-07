<template>
    <div class="flex my-2 mx-1 border-gray-300 bg-gray-200 rounded-md">
        <div class="w-full grid grid-cols-1  px-2 py-3">
            <h1> Upload File Direct</h1>

            <div class="w-full grid grid-cols-3 gap-2 px-2 py-3 mt-2 bg-white rounded-md ">
                <h1> Upload File Direct</h1>
                <label>
                    <input  type="file" id="file" ref="file" v-on:change="onFileChange()"/>
                </label>
                <div class="error">{{errors.file?errors.file[0]:""}}</div>

                <label v-if="file">Name : {{file.name}}</label>
                <label v-if="file"> Size :  {{file.name}}  </label>
                <label  v-if="file" class="error"> Type : {{file.name}}</label>
                <a  v-if="file" :href="aws_url+'/'+this.file_path+file.name" class="">1 Click here for Download. </a>
            </div>
        </div>

    </div>

</template>

<script>

    import { S3 } from "@aws-sdk/client-s3";
    /*import {
        getSignedUrl,
        S3RequestPresigner,
    } from "@aws-sdk/s3-request-presigner";*/


    export default {
        name: "VueJsDirectUpload.vue",
        props: ['files'],
        //components:['getSignedUrl','S3RequestPresigner'],
        data () {
            return {
                file: '',
                errors:{file:[]},
                aws_key_id : import.meta.env.VITE_AWS_ACCESS_KEY_ID,
                aws_key_secrete : import.meta.env.VITE_AWS_SECRET_ACCESS_KEY,
                aws_bucket : import.meta.env.VITE_AWS_BUCKET,
                aws_region : import.meta.env.VITE_AWS_DEFAULT_REGION,
                aws_url :import.meta.env.VITE_AWS_URL,
                aws_cloud_url:import.meta.env.VITE_AWS_CLOUDFRONT_URL,
                file_path:"test_pk/"
            }
        },
        methods: {
           async onFileChange(){
                this.file = this.$refs.file.files[0];
                if (this.file) {
                    // https://stackoverflow.com/questions/69884898/how-to-upload-a-stream-to-s3-with-aws-sdk-v3
                    // https://docs.aws.amazon.com/AmazonS3/latest/userguide/example_s3_Scenario_PresignedUrl_section.html
                    const s3 = new S3({
                        credentials: {
                            accessKeyId: this.aws_key_id,
                            secretAccessKey: this.aws_key_secrete,
                        },
                        region: this.aws_region,
                        signatureVersion: 'v4',
                    });
                    const uploadParams = {
                        Bucket: this.aws_bucket,
                        Key:this.file_path+this.file.name, // add folder path here.
                        Body: this.file,
                      //  ACL: 'public-read'
                        // ContentLength: passThroughStream.readableLength, // include this new field!!
                    };
                    let dateTime = (new Date()).getTime();

                   s3.putObject(uploadParams, (err,data) => {
                       console.log('error' ,err , data );

                    });


                };
                    document.getElementById('file').value="";
                },
            async getS3BucketFiles(){
               // https://docs.aws.amazon.com/AmazonS3/latest/userguide/example_s3_Scenario_PresignedUrl_section.html
                const s3 = new S3({
                    credentials: {
                        accessKeyId: this.aws_key_id,
                        secretAccessKey: this.aws_key_secrete,
                    },
                    region: this.aws_region,
                    signatureVersion: 'v4',
                });
                const uploadParams = {
                    Bucket: this.aws_bucket,
                    Delimiter: "",
                    ServerSideEncryption: "string", // : "AES256"|"aws:kms"|string
                };

                let getS3Files = (callback) => {console.log('1')
                    s3.listObjectsV2(uploadParams, function (err, data) {
                        callback(data); console.log('2')
                    });
                };

                getS3Files((data) => { console.log('3')
                    const files = data.Contents.map((file) => ({
                        fileName: file.key,
                        fileDate: file.LastModified,
                    })).sort((a, b) => b.fileDate - a.fileDate);
                    console.log('6')
                    return files;
                });

               /* let getS3Files = async () => {
                    let files = [];

                    await new Promise( (resolve, reject) =>{
                        s3.listObjectsV2(uploadParams,  (err, data) =>{
                            if (data) {
                                data.Contents.forEach((file) => {
                                    files.push({
                                        fileName: file.Key,
                                        fileDate: file.LastModified,
                                    });
                                });
                                console.log(files);
                                resolve();
                            } else {
                                reject(err);
                            }
                        });
                    });
                    console.log(files);
                    if (files.length > 0) {
                        files = files.sort((a, b) => b.fileDate - a.fileDate);
                        console.log(files);
                    }
                    return files;
                };

                await getS3Files();*/
              }



            },
        created(){
            this.getS3BucketFiles();
        }
    }
</script>

<style scoped>

</style>