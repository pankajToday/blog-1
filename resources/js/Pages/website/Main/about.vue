<template>
  <HeadTag  />
  <HeaderNav :title="headerTitle" />

  <main id="main">
    <section>
      <div class="container" >
        <div class="row">
          <div class="col-lg-12 text-center mb-5">
            <h1 class="page-title">About us</h1>
          </div>
        </div>

        <div class="row mb-5">

          <div class="d-md-flex post-entry-2 half">
            <a href="#" class="me-4 thumbnail">
              <img src="/project-assets/images/about-us-2.jpg" alt="" class="img-fluid">
            </a>
            <div class="ps-md-5 mt-4 mt-md-0">

              <p>Welcome to Pankaj Kumar's digital domain, where innovation meets expertise! Nestled in the heart of Dhanbad, Jharkhand,
                India, I am Pankaj Kumar, a seasoned software developer with a passion for crafting cutting-edge solutions. With over 6
                years of hands-on experience in Full-stack development, I have honed my skills by collaborating with clients from the UK,
                US, and Australia, delivering tailored solutions that transcend geographical boundaries.
              </p>
              <p> Beyond the realm of coding, I find solace in the art of storytelling and sharing technical insights.
                During my downtime, I channel my creative energy into weaving captivating narratives and crafting
                informative content. Engaging with the global tech community, I have actively contributed to Stack
                Overflow for the past 5 years, fostering a culture of knowledge exchange and collaboration.
              </p>
               <p> At the intersection of innovation and imagination, my journey unfolds, driven by a commitment to
                 delivering excellence in every line of code and every story shared.
                 Join me on this digital odyssey, where technology meets creativity, and let's embark on a journey of
                 exploration, learning, and innovation together.
              </p>
            </div>
          </div>

          <div class="d-md-flex post-entry-2 half mt-5">
            <a href="#" class="me-4 thumbnail order-2">
              <img src="/project-assets/images/mission.jpg" alt="" class="img-fluid">
            </a>
            <div class="pe-md-5 mt-4 mt-md-0">
              <h2 class="mb-4 display-4">Mission &amp; Vision</h2>

              <p>Embarking on this professional journey, my commitment extends beyond mere code and narratives.
              It encapsulates a dedication to fostering an inclusive and collaborative tech community. In my pursuit of
              excellence, I prioritize continuous learning and knowledge sharing. From troubleshooting complex coding
              challenges to articulating intricate concepts, my engagement on platforms like Stack Overflow reflects a
                commitment to nurturing a robust ecosystem of developers.</p>

              <p>At the core of my mission is the belief that technology should be a vehicle for empowerment and inclusivity.
              I envision a digital landscape where innovation knows no boundaries, and every aspiring developer,
              regardless of their background, finds the resources and support they need to thrive. My mission is to
              simplify the complexities of software development, making it accessible to all, and to cultivate an
                environment where diverse perspectives fuel creativity and progress.</p>

              <p>Driven by this vision, I leverage my expertise to not only build user-friendly applications and share
              insightful blog posts but also to actively contribute to the growth of a global community. Together,
              let's not only build impressive solutions but also work towards a future where technology is a catalyst
              for positive change. Welcome to a space where the fusion of technology, creativity, and community defines
              the essence of what I do, and where every line of code contributes to a collective journey of growth and
              advancement.</p>

            </div>
          </div>

        </div>

      </div>
    </section>

    <section class="mb-5 bg-light py-5">
      <div class="container" >
        <div class="row justify-content-between align-items-lg-center">
          <div class="col-lg-5 mb-4 mb-lg-0">
            <h2 class="display-4 mb-4">My Activity</h2>
            <p>
              <h4>
                  <strong>Medium Post</strong>
              </h4>  Publishing technical articles on Medium has been an enlightening endeavor for me. Reflecting on my recent programming challenges,
            I observed that the responses from the community on certain topics were less than ideal, often proving to
            be frustrating rather than constructive. When grappling with specific issues and seeking solutions, the
            overall experience fell short of expectations. Recognizing this gap, I am motivated to invest my efforts in
            this domain to contribute a lucid perspective that can genuinely assist and benefit the broader audience.
            <h5> <a href="https://ankuprsdpkp.medium.com" target="_blank">Posts : Visit</a></h5>
            </p>
            <p>
            <h4>
              <strong>StackOverFlow</strong>
            </h4>  Stack Overflow stands out as a highly regarded community platform for us. It not only provides
            valuable solutions but also extends a helping hand whenever needed. I've actively participated for the
            past five years, accruing numerous points and badges along the way. Whenever I encounter a challenge,
            my initial instinct is to turn to Stack Overflow, as more often than not, it proves to be the go-to source
            for resolving issues. If the solution isn't readily available, I either delve into research on the other
            side or embark on a journey to troubleshoot and resolve the problem independently.
            <h5> <a href="https://stackoverflow.com/users/4335210/pankaj?tab=profile" target="_blank"> My Profile : Visit</a> </h5>
            </p>
            <p>
            <h4>
              <strong>LinkedIn</strong>
            </h4>
            The LinkedIn community plays a crucial role in shaping our careers. It not only connects us with our technical
            peers but also facilitates network expansion. LinkedIn continually enhances user experience, now allowing us
            to showcase our skills through tests and achievements visible to recruiters. Personally, I've participated
            in PHP and other tests, enriching my knowledge through insightful posts.
            <h5> <a href="https://www.linkedin.com/in/pankaj-kumar-cool" target="_blank"> LinkedIn: Visit</a> </h5>
            </p>
            <p><a href="/" class="more">View All Blog Posts</a></p>
          </div>
          <div class="col-lg-6">
            <div class="row">
              <div class="col-6">
                <img src="/project-assets/images/news.jpg" alt="" class="img-fluid mt-4 mb-4">
              </div>
              <div class="col-6 mt-4">
                <img src="project-assets/images/news2.jpg" alt="" class="img-fluid mb-4">
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>



  </main><!-- End #main -->

  <FooterSection :title="headerTitle"/>

</template>

<script>
    import Swal from 'sweetalert2';
    import  HeadTag from './Component/Head.vue';
    import  HeaderNav from './Component/Header.vue';
    import  FooterSection from './Component/Footer.vue';

    export default {
        name: "About-Us",
        components: {HeadTag ,HeaderNav,FooterSection },
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
