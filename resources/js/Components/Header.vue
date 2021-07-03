<template>
  <header>
    <div>
      <h1>Igor Franco</h1>
      <nav>
        <ul>
          <li v-for="nav of navs">
            <inertia-link :href="nav.url">
              {{ nav.text }}
            </inertia-link>
          </li>
        </ul>
      </nav>
    </div>
  </header>
</template>

<script>
export default {
  name: "header",
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

<style scoped>
header{
  position: fixed;
  width: 100%;
  padding: 1rem;
  background-color: #ffffff;
  box-shadow: 0 3px 3px 0 rgba(0,0,0,.1);
}
header > div{
  margin: auto;
  max-width: 935px;
  display: flex;
  justify-content: space-between;
}
header ul{
  display: flex;
  gap: 1rem;
}
</style>
