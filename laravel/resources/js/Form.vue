<template>
  <div>
      <form-component v-bind:curso="this.curso"></form-component>
  </div>
</template>

<script>
import FormComponent from "./components/FormComponent.vue";

export default {
  name: "Form",
  props: ["curso"],
  components: {
    FormComponent
  }
};
</script>
