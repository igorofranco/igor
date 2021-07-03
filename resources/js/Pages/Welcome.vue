<template>
  <section>
    <Header/>
    <main>
      <div>Boas Vindas!</div>
    </main>
  </section>
</template>

<style scoped>
main{
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;
  background-color: #f1d306;
}
main > div{
  font-size: 5rem;
}
@media screen and (max-width: 640px){
  main > div{
    font-size: 3.5rem;
  }
}
</style>

<script>
import Header from "../Components/Header.vue";
export default {

  props: {

  },
  components: {
    "Header":Header
  },
  data(){
    return {
      navs: [
        {
          text: "Login",
          url: route('login')
        },
        {
          text: "Registrar",
          url: route('register')
        }
      ]
    }
  }
}
</script>
