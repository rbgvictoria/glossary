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
          <router-link :to="{ name: 'glossary', hash: '#' + rel.relatedTerm.name }">{{ rel.relatedTerm.name }}</router-link>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  props: [
    'glossary',
    'term'
  ],
  data() {
    return {
      termData: {}
    }
  },
  methods: {
    getTerm() {
      if (this.term) {
        axios.get(`${process.env.MIX_GLOSSARY_URL}/terms/${this.term.value}`, {
          params: {
            include: 'relationships'
          }
        }).then(response => {
          this.termData = response.data
        })
      }
      else {
        this.termData = {}
      }
    },
    findTerm() {
      axios.get(`${process.env.MIX_GLOSSARY_URL}/search`, {
        params: {
          glossary: this.glossary,
          term: this.$route.hash.substr(1),
          include: 'relationships'
        }
      }).then(
        response => {
          if (response.data && response.data.data.length) {
            this.termData = response.data.data[0]
          }
        }
      )
    }
  },
  mounted() {
    this.getTerm()
  },
  watch: {
    '$route.hash': function() {
      if (this.$route.hash.length > 2) {
        this.findTerm()
      }
    },
    term: function() {
      this.getTerm()
    }
  }
}
</script>
