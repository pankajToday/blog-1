<template>
    <h1> Child Component </h1>
    <div class="px-2 py-1 mx-2 border border-gray-200 rounded-md ">
        <label for="test"  class="px-2 py-1 mx-2" > Test </label>
        <input type="text" id="test" v-model="input_two" @input="sendInput" @blur="sendBlur"  class="w-full px-2 py-1 border rounded-md "/>
    </div>
</template>

<script>
    export default {
        name: "TestPost",
        props:["parentVal"],
        data() {
            return {
                input_two: '',
                title:"",
            }
        },
        methods:{
            sendInput () {
                this.$emit('input', this.input_two);
            },
            sendBlur(){
                this.$emit('blur', "Child sending blur event!");
            }
        },
        created(){

        }
    }
</script>

<style scoped>

</style>