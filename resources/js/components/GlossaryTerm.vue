<template>
  <div id="definition">
    <h2>{{ termData.name }}</h2>
    <div class="definition" v-html="termData.definition"></div>
    <div v-if="termData.relationships && termData.relationships.data.length"
        class="glossary-relationships">
      <h4>Relationships</h4>
      <div class="row" v-for="rel in termData.relationships.data">
        <div class="col-xs-6 col-md-8">
          <span class="glossary-rel-type">{{ rel.relationshipType.label }}</span>
        </div>
        <div class="col-xs-6 col-md-4 text-right">
          <a href="#adaxial" class="glossary-link">{{ rel.relatedTerm.name }}</a>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  props: [
    'term'
  ],
  data() {
    return {
      termData: {}
    }
  },
  methods: {
    getTerm() {
      axios.get('/api/terms/' + this.term)
          .then(response => {
            this.termData = response.data
          })
    }
  },
  watch: {
    term: function() {
      this.getTerm()
    }
  }
}
</script>
