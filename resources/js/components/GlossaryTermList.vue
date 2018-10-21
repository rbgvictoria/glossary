<template>
<div id="term-list">
  <ul>
    <li v-for="term in terms">
      <i class="fa fa-caret-right"></i>
      <a :href="'#' + term.label" :data-value="term.value" @click.prevent="onClick(term)">
        {{ term.label }}
      </a>
    </li>
  </ul>
</div>
</template>

<script>

import axios from 'axios'

export default {
  props: [
    'firstLetter'
  ],
  data() {
    return {
      terms: []
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
        if (this.terms) {
          this.onClick(this.terms[0])
        }
      })
    },
    onClick(term) {
      this.$emit('term-clicked', term)
    }
  },
  mounted() {
    this.getTerms()
  },
  watch: {
    firstLetter: function() {
      this.getTerms()
    }
  }
}

</script>
