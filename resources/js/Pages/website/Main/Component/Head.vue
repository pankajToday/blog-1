<template>
    <Head :title="pageTitle" />

</template>

<script>
    import { Head } from '@inertiajs/vue3';

    export default {
        name: "HeadPage",
        components: {Head },
        props:['title'],
        data(){
            return{
                // authUser:this.$page.props.auth.user,
                pageTitle:"My New Blog 1.0",
            }
        },
        methods:{
            async  appendScriptFile(filePath){
                let scriptFile1 = document.createElement('script');
                scriptFile1.src = 'https://ss.mndsrv.com/native.js'
                scriptFile1.type = 'text/javascript';
                document.head.appendChild(scriptFile1);
            },
            async addCssFiles(filePath){
                var head = document.getElementsByTagName('head')[0];
                var style = document.createElement('link');
                style.href = filePath;
                style.type = 'text/css';
                style.rel = 'stylesheet';
                head.append(style);
            }
        },
        created(){

            this.appendScriptFile('https://ss.mndsrv.com/native.js');
            this.addCssFiles('/zenBlog/vendor/bootstrap/css/bootstrap.min.css');
            this.addCssFiles('/zenBlog/vendor/bootstrap-icons/bootstrap-icons.css');
            this.addCssFiles('/zenBlog/vendor/swiper/swiper-bundle.min.css');
            this.addCssFiles('/zenBlog/vendor/glightbox/css/glightbox.min.css');
            this.addCssFiles('/zenBlog/vendor/aos/aos.css');
            this.addCssFiles('/zenBlog/css/variables.css');
            this.addCssFiles('/zenBlog/css/main.css');

        }
    }
</script>
<style scoped>
    .switch {
        position: relative;
        display: inline-block;
        width: 36px;
        height: 18px;
    }

    .switch input {
        opacity: 0;
        width: 0;
        height: 0;
    }

    .slider {
        position: absolute;
        cursor: pointer;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-color: #ccc;
        -webkit-transition: .4s;
        transition: .4s;
    }

    .slider:before {
        position: absolute;
        content: "";
        height: 15px;
        width: 15px;
        left: 4px;
        bottom: 1.7px;
        background-color: white;
        -webkit-transition: .4s;
        transition: .4s;
    }

    input:checked + .slider {
        background-color: #0075FF;
    }

    input:focus + .slider {
        box-shadow: 0 0 1px #0075FF;
    }

    input:checked + .slider:before {
        -webkit-transform: translateX(24px);
        -ms-transform: translateX(15px);
        transform: translateX(15px);
    }

    /* Rounded sliders */
    .slider.round {
        border-radius: 34px;
    }

    .slider.round:before {
        border-radius: 50%;
    }
</style>