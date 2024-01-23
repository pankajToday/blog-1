<template>
     <HeadTag  />
     <HeaderNav :title="headerTitle" />
     <TopSlider />
     <MainPostSection />
     <FooterSection :title="headerTitle"/>


     <!--<img class="w-[100%] h-[50%]" :src="asset('project-assets/img/bg-masthead.jpg')">-->
</template>

<script>
    import Swal from 'sweetalert2';
    import  HeadTag from './website/Main/Component/Head.vue';
    import  HeaderNav from './website/Main/Component/Header.vue';
    import  TopSlider from './website/Main/Component/TopSliderSection.vue';
    import  MainPostSection from './website/Main/Component/MainPost.vue';
    import  CategoryPostSection from './website/Main/Component/CategoryPost.vue';
    import  FooterSection from './website/Main/Component/Footer.vue';

    export default {
        name: "MainPage",
        components: {HeadTag ,HeaderNav,TopSlider,MainPostSection,CategoryPostSection,FooterSection },
        props:['title'],
        data(){
            return{
               // authUser:this.$page.props.auth.user,
                headerTitle :'Tech Blog',
            }
        },
        methods:{},
        created(){
            //console.log(this.authUser)
        }
    }
</script>


<style scoped>

</style>
