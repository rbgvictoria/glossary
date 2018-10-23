<template>
<div id="term-list">
  <ul>
    <li v-for="term in terms" :class="term.label === activeTerm ? 'active' : false">
      <i class="fa fa-caret-right"></i>
      <router-link :to="{ name: 'home', hash: '#' + term.label }">{{ term.label }}</router-link>
    </li>
  </ul>
</div>
</template>

<script>

import axios from 'axios'

export default {
  data() {
    return {
      firstLetter: false,
      terms: [],
      activeTerm: false
    }
  },
  methods: {
    getTerms() {
      axios.get('/api/autocomplete', {
        params: {
          term: this.firstLetter
        }
      }).then(response => {
        this.terms = response.data
        if (typeof this.$route.hash === 'undefined' || this.$route.hash.length < 3) {
          this.$router.push({ name: 'home', hash: '#' + this.terms[0].label})
        }
        else {
          this.activeTerm = this.$route.hash.substr(1)
        }
      })
    },
    onClick(term) {
      this.$emit('term-clicked', term)
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
    }
  }
}

</script>
