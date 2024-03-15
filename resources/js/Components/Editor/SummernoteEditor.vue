<template>
    <textarea v-model="content" class="hidden w-full border border-gray-50" id="summernote"></textarea>
</template>

<script>
    export default {
        name: "Summernote Editor",
        props:['editorContent'],
        data() {
            return {
                content: this.editorContent,
            }
        },
        methods:{

        },
        created(){
            setTimeout(()=>{
                $('#summernote').summernote({
                    placeholder: 'type your post.',
                    spellCheck:true,
                    width:'100%',
                    tabDisable: false,
                    dialogsInBody: true,// Dialogs can be placed in body, not within Summernote. If you’re using Summernote within a modal dialog, please set this option as true
                    addDefaultFonts:false,
                    toolbar: [
                        ['style', ['style','family']],
                        ['font', ['bold','italic','strikethrough','superscript', 'underline', 'clear','fontname','fontsize','fontsizeunitck','color','forecolor',
                            'backcolor']],
                        ['color', ['color']],
                        ['para', ['ul', 'ol', 'paragraph','height']],
                        ['table', ['table']],
                        ['insert', ['link', 'picture', 'video','table','hr']],
                        ['view', [ 'codeview']]
                    ],
                    popover: {
                        image: [
                            ['image', ['resizeFull', 'resizeHalf', 'resizeQuarter', 'resizeNone']],
                            ['float', ['floatLeft', 'floatRight', 'floatNone']],
                            ['remove', ['removeMedia']]
                        ],
                        link: [
                            ['link', ['linkDialogShow', 'unlink']]
                        ],
                        table: [
                            ['add', ['addRowDown', 'addRowUp', 'addColLeft', 'addColRight']],
                            ['delete', ['deleteRow', 'deleteCol', 'deleteTable']],
                        ],
                        air: [
                            ['color', ['color']],
                            ['font', ['bold', 'underline', 'clear']],
                            ['para', ['ul', 'paragraph']],
                            ['table', ['table']],
                        ]
                    },
                    callbacks: {
                        onChange: function( contents) {
                            eventBus.$emit('editorContents', contents );
                        }
                    }
                });

                $(".note-editable").css('textAlign','left');
                $(".note-editable").css('min-height','200px');
            },1000);
        },
        setup(){
            let script1 = document.createElement('script');
            script1.setAttribute('src', 'https://code.jquery.com/jquery-3.4.1.slim.min.js')
            document.head.appendChild(script1)

            const script2 = document.createElement('script');
            script2.setAttribute('src', 'https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js')
            document.head.appendChild(script2)

            const styleFile1 = document.createElement('link');
            styleFile1.setAttribute('href', 'https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css')
            styleFile1.setAttribute('rel', 'stylesheet')
            document.head.appendChild(styleFile1)

        },

    }
</script>

<style scoped>

</style>