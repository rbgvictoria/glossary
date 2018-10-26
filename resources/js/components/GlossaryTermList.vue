<template>
<div id="term-list">
  <ul>
    <li v-for="term in terms" :class="term.value === activeTerm.value ? 'active' : false">
      <i class="fa fa-caret-right"></i>
      <router-link :to="{ name: 'glossary', hash: '#' + encodeURIComponent(term.label) }">{{ term.label }}</router-link>
    </li>
  </ul>
</div>
</template>

<script>

import axios from 'axios'

export default {
  props: ['glossary'],
  data() {
    return {
      firstLetter: false,
      terms: [],
      activeTerm: false
    }
  },
  methods: {
    getTerms() {
      axios({
        url: `${process.env.MIX_GLOSSARY_URL}/autocomplete`,
        method: 'get',
        params: {
          glossary: this.glossary,
          term: this.firstLetter
        }
      }).then(response => {
        this.terms = response.data
        if (typeof this.$route.hash === 'undefined' || this.$route.hash.length < 3) {
          this.activeTerm = this.terms[0]
        }
        else {
          let filtered = this.terms.filter(term => term.label === decodeURIComponent(this.$route.hash.substr(1)))
          if (filtered.length) {
            this.activeTerm = filtered[0]
          }
        }
      })
    }
  },
  mounted() {
    if (this.$route.hash) {
      this.firstLetter = this.$route.hash.substr(1, 1)
    }
    else {
      this.firstLetter = 'a'
    }
    this.getTerms()
  },
  watch: {
    '$route.hash': function() {
      this.firstLetter = this.$route.hash.substr(1, 1)
      this.getTerms()
    },
    activeTerm: function() {
      this.$emit('term-selected', this.activeTerm)
    }
  }
}

</script>
