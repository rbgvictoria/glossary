<template>
  <div>
    <h4>Images</h4>
    <div v-for="image in images" :key="image.id">
      <figure>
        <img :src="image.url + '?maxsize=1024'" :alt="image.caption" class="img-responsive" />
        <figcaption v-html="image.caption"></figcaption>
      </figure>
    </div>
  </div>
</template>

<script>
export default {
  props: ['images'],
}
</script>

<style>
figcaption {
  margin-top: 8px;
  margin-bottom: 24px;
}

.license-logo {
  height: 24px;
  width: auto;
  vertical-align: bottom;
}
</style>
