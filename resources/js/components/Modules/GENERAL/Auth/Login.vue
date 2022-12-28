<template>
  <h1>Login Page Here</h1>
</template>
  
<script setup>
import { ref, shallowRef, reactive, defineAsyncComponent } from "vue";
import { callApi, retrieve, isSuccess } from "helpers/common";

const logGmail = async () => {
  window.location.href = "auth/google";
};

const logFacebook = async () => {
  window.location.href = "auth/facebook";
};
</script>
  