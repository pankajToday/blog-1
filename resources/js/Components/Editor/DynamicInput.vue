<template>
    <div class="di-container py-1.5">
        <div v-show="selected" class="px-2 py-1 rounded bg-gray-800 max-w-28 space-x-1.5 absolute -top-10 left-4">
            <button class="p-0.5 px-1.5 border border-gray-100 rounded hover:bg-gray-700 text-gray-50 text-vs " @click.prevent="changeType('b')">B</button>
            <button class="p-0.5 pr-2 pl-1 border border-gray-100 rounded hover:bg-gray-700 text-gray-50 text-vs italic" @click.prevent="changeType('i')">I</button>
            <button class="p-0.5 border border-gray-100 rounded hover:bg-gray-700 text-gray-50 text-vs" @click.prevent="changeType('h1')">H1</button>
            <button class="p-0.5 border border-gray-100 rounded text-gray-50 hover:bg-gray-700 text-vs" @click.prevent="changeType('h2')">H2</button>
            <button class="p-0.5 px-1.5 border border-gray-100 rounded hover:bg-gray-700 bg-gray-700 text-gray-50 text-vs" @click.prevent="changeType('p')">P</button>
        </div>
        <div class="flex items-center ">
            <div v-if="toolbar" class="flex items-center relative">
                <svg @click.prevent="plusDetail = !plusDetail" :class="{'rotate-45' :plusDetail , 'rotate-0' :!plusDetail}" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-10 h-10 text-gray-400 cursor-pointer mr-2 duration-300">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v6m3-3H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                <div v-if="plusDetail" class="flex items-center rounded ml-4 py-2 px-2.5 rounded absolute top-0 left-8 space-x-2">
                    <div class="w-7 h-7 rounded-full border-2 border-green-600 cursor-pointer flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-4 h-4 text-green-600 m-auto">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 15.75l5.159-5.159a2.25 2.25 0 013.182 0l5.159 5.159m-1.5-1.5l1.409-1.409a2.25 2.25 0 013.182 0l2.909 2.909m-18 3.75h16.5a1.5 1.5 0 001.5-1.5V6a1.5 1.5 0 00-1.5-1.5H3.75A1.5 1.5 0 002.25 6v12a1.5 1.5 0 001.5 1.5zm10.5-11.25h.008v.008h-.008V8.25zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z" />
                        </svg>
                    </div>
                    <div class="w-7 h-7 rounded-full border-2 border-yellow-500 cursor-pointer flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-4 h-4 text-yellow-500 m-auto">
                            <path stroke-linecap="round" d="M15.75 10.5l4.72-4.72a.75.75 0 011.28.53v11.38a.75.75 0 01-1.28.53l-4.72-4.72M4.5 18.75h9a2.25 2.25 0 002.25-2.25v-9a2.25 2.25 0 00-2.25-2.25h-9A2.25 2.25 0 002.25 7.5v9a2.25 2.25 0 002.25 2.25z" />
                        </svg>
                    </div>
                    <div class="w-7 h-7 rounded-full border-2 border-indigo-400 cursor-pointer flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-4 h-4 text-indigo-400 m-auto">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M18.375 12.739l-7.693 7.693a4.5 4.5 0 01-6.364-6.364l10.94-10.94A3 3 0 1119.5 7.372L8.552 18.32m.009-.01l-.01.01m5.699-9.941l-7.81 7.81a1.5 1.5 0 002.112 2.13" />
                        </svg>
                    </div>
                    <div class="w-7 h-7 rounded-full border-2 border-orange-400 cursor-pointer flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-4 h-4 text-orange-400">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" />
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-4 h-4 text-orange-400">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                        </svg>
                    </div>

                </div>
            </div>
            <div v-else class="flex items-center relative ml-12"></div>

            <textarea
                :id="`di-${index}`"
                :class="`${data.type}`"
                class="p-2.5 w-full text-sm bg-gray-50 text-gray-900 rounded-lg border-transparent focus:outline-none outline-transparent"
                autocomplete="off"
                type="text"
                v-model="data.content"
                :placeholder="data.placeholder"
                @keydown="keyevent"
                @mouseup="checkSelected"
                @focusin="focus = true"

            ></textarea>
        </div>

    </div>
</template>

<script>

export default {
    data() {
        return {
            selected: false,
            plusDetail: false,
            focus: false
        }
    },
    props: ['data', 'index', 'lastIndex'],
    methods: {
        // open(){
        //     console.log(this.lastIndex);
        //
        //     this.focus = true;
        //     // if(this.data.content.length) this.toolbar = false;
        //     // else this.data.toolbar = true
        // },
        // close(e){
        //     this.data.toolbar = false
        // },
        changeType(type) {
            this.data.type = type;
            document.getElementById('di-'+this.index).style.height = '40px';
            this.selected = false
        },
        newLine() {
            this.$emit('newLine', this.index)
        },
        deleteLine() {
            if(this.data.content.length === 0){
                this.$emit('deleteLine', this.index)
            }
        },
        moveIndex(dir) {
            if(dir === 'up'){
                this.$emit('moveIndex', this.index - 1)
            }
            if(dir === 'down'){
                this.$emit('moveIndex', this.index + 1)
            }
        },
        checkSelected() {
            this.selected = false
            if(this.data.content.length === 0) return;
            const selection = window.getSelection().toString().trim()
            if(selection === this.data.content.trim()){
                this.selected = true
            }
        },
        keyevent(e) {
            if(e.code === 'Enter'){
                e.preventDefault();
                return this.newLine()
            }
            if(e.code === 'Backspace') {
                return this.deleteLine()
            }
            e.target.style.height = '1px';
            e.target.style.height = (e.target.scrollHeight)+"px";
        }
    },
    computed: {
        toolbar() {
            if(this.data.content.length) return false;
            if(this.focus) return true;
            return this.focus && this.index === (this.lastIndex - 1);
        }
    }
}
</script>

<style scoped>

    textarea {
        border: none;
        outline: none;
        -webkit-box-shadow: none;
        -moz-box-shadow: none;
        box-shadow: none;
        resize: none; /*remove the resize handle on the bottom right*/
    }
    textarea:focus{
        outline: none;
        border: none;
        resize: none; /*remove the resize handle on the bottom right*/
    }

    textarea.h1 {
        font-size: 32px;
        height: 40px;
    }

    textarea.h2 {
        font-size: 24px;
        height: 26px;
    }

    textarea.p {
        font-size: 14px;
        height: 40px;
    }

    textarea.b {
        font-weight: bold;
        height: 40px;
    }

    textarea.i {
        font-style: italic;
        height: 40px;
    }

    div.di-container {
        position: relative;
    }

</style>
