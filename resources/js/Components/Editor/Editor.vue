<template>
    <div>
        <nav>
            <div class="lastSaved">{{saved}}</div>
            <button class="px-3 py-1.5 hover:bg-purple-600 rounded bg-purple-500 text-white text-xs font-medium focus:outline-none" @click.prevent="save">Save</button>
        </nav>
        <div id="medium-editor" class="mt-2">
            <dynamic-input :lastIndex="blocks.length" v-for="(block, i) in blocks" :key="i" :data="block" :index="i" @newLine="newLine" @deleteLine="deleteLine" @moveIndex="focusOnIndex"></dynamic-input>
        </div>
    </div>
</template>

<script>

import DynamicInput from './DynamicInput.vue'

export default {
    components: {DynamicInput},
    data() {
        return {
            saved: "",
            blocks: [] // Each block is a line of content
        }
    },
    props: ['html', 'config'], // html will be the source of truth. config will handle onSave method
    methods: {
        newLine(v){
            const index = v + 1
            console.log(this.blocks[index])
            // if(this.blocks[index] !== undefined){
            //     this.focusOnIndex(index)
            //     return
            // }
            const blocks = [...this.blocks]
            blocks.splice(index, 0, {'type': 'p', 'content': '', 'placeholder': ''})
            this.blocks = blocks
            this.focusOnIndex(index)
        },
        deleteLine(v){
            const blocks = [...this.blocks]
            blocks.splice(v, 1)
            this.blocks = blocks
            this.focusOnIndex(v - 1)
        },
        focusOnIndex(index){
            const element = document.getElementById('di-'+index)
            if(element){
                console.log('there is an element')
                element.focus()
            }else{
                setTimeout(()  => {
                    this.focusOnIndex(index)
                }, 100)
                console.log('there is no element')
            }
        },
        save() {
            let html = "";

            this.blocks.forEach(b => {
                if(!b.content) return
                html += `<${b.type}>${b.content}</${b.type}>\n`
            })

            this.saved = "Saved " + (new Date()).toLocaleTimeString()

            try{
                this.config.save({html: html, blocks: this.blocks})
            }catch(e) {
                console.log('Save callback missing from config')
                console.log({html: html, blocks: this.blocks})
            }
        }
    },
    mounted() {
        if(this.html){
            // Loop through html and break into blocks
            let data = JSON.parse(this.html)
            this.blocks = data.blocks
        }else{
            // Default state for the blocks if empty
            this.blocks = [
                {'type': 'h1', 'content': '', 'placeholder': 'Title'},
                {'type': 'p', 'content': '', 'placeholder': 'Tell your story...'}
            ]
        }
    }
}
</script>

<style scoped>

#medium-editor {
    /*margin: 20px auto;*/
    padding: 0;
    width: 100%;
}

/*textarea {*/
/*    border: none;*/
/*    background: none;*/
/*    outline: none;*/
/*    resize: none;*/
/*    width: 100%;*/
/*    overflow: hidden;*/
/*    padding:0;*/
/*    font-family: sans-serif;*/
/*    -webkit-box-shadow: none;*/
/*    -moz-box-shadow: none;*/
/*    box-shadow: none;*/
/*}*/

nav {
    display: flex;
    justify-content: flex-end;
    align-items: center;
}



::selection {
    background: #ffb7b7; /* WebKit/Blink Browsers */
}
::-moz-selection {
    background: #ffb7b7; /* Gecko Browsers */
}

nav div.lastSaved {
    color:#aaa;
    margin-right: 10px;
}

</style>
