<script setup>
import { useForm } from '@inertiajs/vue3'

const form = useForm({
  email: 'name@example.com', // Todo: Default Mail for testing
  password: '',
  remember: false
})

function submit() {
  form.post('/login', {
    onSuccess: (res) => console.log(res)
  })
  form.reset('password')
}
</script>
<template>
  <div class="text-gray-500 dark:text-gray-400 bg-gray-100 dark:bg-gray-900 w-full h-screen">
    <div class="py-6 px-1 md:px-2 lg:px-6">
      <form
        class="bg-white dark:bg-gray-800 shadow rounded-lg p-6 max-w-[25rem] mx-auto flex flex-col gap-4"
        @submit.prevent="submit"
      >
        <h1 class="text-center text-xl">Welcome Back!</h1>
        <label>
          Email Address
          <input
            v-model="form.email"
            type="email"
            class="form-input"
            placeholder="Email Address"
            required
          />
          <span v-if="form.errors && form.errors.email" class="danger block">{{ form.errors.email }}</span>
        </label>
        <label>
          Password
          <input
            v-model="form.password"
            type="password"
            class="form-input"
            placeholder="Password"
            required
          />
          <span v-if="form.errors && form.errors.password" class="danger block">{{ form.errors.password }}</span>
        </label>
        <div class="flex flex-wrap justify-between gap-1 text-sm">
          <label class="inline-block select-none">
            <input v-model="form.remember" type="checkbox" class="form-checkbox" />
            Remember me
          </label>
          <a href="/password/reset" class="text-gray-500 no-underline hover:underline">
            Forgot your password?
          </a>
        </div>
        <div class="text-center">
          <button type="submit" class="bg-sky-500 hover:bg-primary-400 text-white dark:text-gray-90">
            Log In
          </button>
        </div>
      </form>
    </div>
  </div>
</template>
