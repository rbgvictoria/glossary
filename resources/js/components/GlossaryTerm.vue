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
    <glossary-term-image v-if="termData.images && termData.images.data.length" :images=termData.images.data></glossary-term-image>
  </div>
</template>

<script>

import GlossaryTermImage from './GlossaryTermImage'

export default {
  components: {
    GlossaryTermImage
  },
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
            include: 'relationships,images'
          }
        }).then(response => {
          this.termData = response.data
          if (this.termData.images && this.termData.images.data.length) {
            this.termData.images.data = this.termData.images.data.map(
              (img) => {
                return {
                  id: img.id,
                  url: img.url,
                  caption: this.makeCaption(img)
                }
              }
            )
          }
        })
      }
      else {
        this.termData = {}
      }
    },
    makeCaption(img) {
      let caption = [];
      if (img.caption) {
        caption.push(img.caption + ' hello... ')
      }
      if (img.creator) {
        caption.push(img.creator + '.')
      }
      if (img.rights) {
        caption.push(img.rights + '.')
      }
      if (img.licenseUrl) {
        caption.push(`<a href="${ img.licenseUrl }"><img src="${ img.licenseLogoUrl }" alt="" class="license-logo"/></a>`)
      }
      return caption.join(' ')
    }
  },
  mounted() {
    this.getTerm()
  },
  watch: {
    term: function() {
      this.getTerm()
    }
  }
}
</script>
