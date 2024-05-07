<template>
    <div class="w-full vue-multiSelect rounded-md">
        <input  id="searchInput"  @input="debounceSearch(); VuMultiSelectDom('vue-multiSelect');"  @click="itemList=true; " placeholder="type tag name" autocomplete="off"
                data-placeholder="Type tag name" class="multiSelectSearchInput w-full h-11 px-2 py-2 rounded-md border border-[#c8c8c8] text-[#444] text-sm font-medium">

        <span  @click="itemList=true;"  class="vue-multiSelect-arrow"></span>

        <ul v-show="itemList" id="vue-multiSelect"  @mouseleave="itemList=false" :class="optionList && optionList.length?'border border-gray-400':''" class="w-full h-auto vue-multiSelect-ul  absolute bg-gray-50  rounded-md blur:bg-green-200">
            <li v-show="!multiSelectLoading" class="w-full vue-multiSelect-li py-1 px-2 rounded-md  hover:bg-green-400 hover:text-white" @click="selectedVal('searchInput',item); itemList = false; "
                v-for="item in optionList" >{{item.label}} </li>
        </ul>
    </div>
</template>

<script>
    export default {
        name: "UIMultiSelect.vue",
        data(){ return{
            multiSelectLoading:false,
            itemList:false,
            optionList:[],
        }},
        methods:{
          async  searchItems(){
                let payload={ search :query};
                this.optionList =[];
                await axios.post('/api/keyword-search', payload).then( (resource) =>{
                    if( resource.status === 200 ){
                        resource.data.forEach((d,i)=>{
                            this.optionList[i]={label:d.name,value:d.id};
                        });
                         this.optionList;
                    }
                }).catch((error)=>{

                })
            },
            VuMultiSelectDom(id){
                var list = document.getElementById(id);
                if( list ){
                    let selectedIndex = 0;

                    list.removeAttribute('title'); // Remove tooltip
                    list.removeAttribute('placeholder'); // Remove input text hint

                    document.addEventListener('keydown', function(event) {
                        //  var targetElem = event.target

                        var listItems = document.querySelectorAll('.vue-multiSelect-ul .vue-multiSelect-li');

                        // Change background color of all li elements to white
                        listItems.forEach(function(item) {
                            item.style.backgroundColor = '';
                            item.style.color ="black";
                        });

                        // Check if the key pressed is either ArrowUp or ArrowDown
                        if (event.key === 'ArrowUp') {
                            selectedIndex = Math.max(0, selectedIndex - 1);
                            // Prevent default scroll behavior
                            event.preventDefault();
                            // Scroll up by modifying scrollTop
                            list.scrollTop -= 1; // Adjust as needed
                        } else if (event.key === 'ArrowDown') {
                            selectedIndex = Math.min(list.children.length - 1, selectedIndex + 1);
                            // Prevent default scroll behavior
                            event.preventDefault();
                            // Scroll down by modifying scrollTop
                            list.scrollTop += 1; // Adjust as needed
                        }

                        // set highlight color for scrollable element.
                        if(  list.children[selectedIndex] ){
                            if (event.key === 'Enter') {
                                list.children[selectedIndex].click();
                            }
                            list.children[selectedIndex].style.backgroundColor = '#4a80de'  ;
                            //list.children[selectedIndex].style.color ="white";
                        }
                    });
                }
            },
            selectedVal(elem,val){
                document.getElementById(elem).value =val.label;
                // you can use this method to pick item value. it is optional.
            },
            debounceSearch: _.debounce(function (e) {
                this.searchItems();
            }, 1000),
        },
        created(){
            
        }
        
    }
</script>

<style scoped>
    .vue-multiSelect{
        box-sizing: content-box;
        display: block;
        position: relative;
        width: 100%;
        min-height: 40px;
        text-align: left;
        color: #35495e;
    }

    .multiSelectSearchInput:empty:not(:focus):before {
        content: attr(data-placeholder);
        color:rgb(191 194 198 / 84%) !important;
    }

    .multiSelectSearchInput:empty:focus:before {
        content: " ";
    }

    .vue-multiSelect-arrow {
        position: absolute;
        width: 40px;
        height: 38px;
        right: 1px;
        top: 1px;
        padding: 4px 8px;
        text-align: center;
        transition: transform .2s ease;
        cursor:pointer;
    }
    .vue-multiSelect-arrow:before {
        position: relative;
        right: 0;
        top: 65%;
        color: #999;
        margin-top: 4px;
        border-style: solid;
        border-width: 5px 5px 0;
        border-color: #999 transparent transparent;
        content: "";
    }
    .vue-multiSelect-ul{
        max-height:70vh !important;
        overflow: auto;
        cursor: pointer;
        z-index: 9;
    }

    /* Define the scrollbar style
    https://blog.logrocket.com/guide-styling-css-scrollbars/#:~:text=both%20are%20present-,Styling%20scrollbars%20in%20Chrome%2C%20Edge%2C%20and%20Safari,the%20scrollbar%2C%20as%20listed%20above.
    */
    .vue-multiSelect-ul::-webkit-scrollbar {
        width: 10px;
        height: 10px;
    }

    /* Define the thumb style */
    .vue-multiSelect-ul::-webkit-scrollbar-thumb {
        background: linear-gradient(to bottom right, #4d7fff 0%, #1a56ff 100%);
        border-radius: 5px;
    }

    /* Define the track style */
    .vue-multiSelect-ul::-webkit-scrollbar-track {
        background-color: #ddd;
        border: 1px solid #ccc;
    }

    /* Define the button style */
    .vue-multiSelect-ul::-webkit-scrollbar-button {
        background-color: #4d7fff;
        border-radius: 5px;
    }

    /* Define the button style when being hovered over */
    .vue-multiSelect-ul::-webkit-scrollbar-button:hover {
        background-color: #999999;
    }

    .elmHover{
        background-color: rgb(74 222 128 /1 );
    }
    .elmHoverRemove{
        background-color: '';
    }
</style>