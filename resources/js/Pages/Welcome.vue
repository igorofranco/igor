<template>
  <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">
    <div v-if="canLogin" class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
      <inertia-link v-if="$page.props.user" href="/dashboard" class="text-sm text-gray-700 underline">
        Painel
      </inertia-link>

      <template v-else>
        <inertia-link :href="route('login')" class="text-sm text-gray-700 underline">
          Login
        </inertia-link>

        <inertia-link v-if="canRegister" :href="route('register')" class="ml-4 text-sm text-gray-700 underline">
          Registrar
        </inertia-link>
      </template>
    </div>

    <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
      <h1>Igor Franco</h1>
    </div>
  </div>
</template>

<style scoped>
h1{
  font-size: 3em;
}
</style>

<script>
export default {
  props: {
    canLogin: Boolean,
    canRegister: Boolean,
    laravelVersion: String,
    phpVersion: String,
  }
}
</script>
