<template>
    <nav>
        <router-link :to="{ name: 'Home' }">Home</router-link>
        <router-link v-bind:to="{ name: 'About' }">About</router-link>
        <router-link to="/user">User</router-link>
    </nav>
</template>
