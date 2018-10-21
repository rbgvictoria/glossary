<template>
  <div id="glossary-terms">
    <div id="glossary-first-letter">
        <a v-for="letter in alpha" :class="letter === firstLetter ? 'active' : false">
          <span class="letter" @click="onClick(letter)">{{ letter.toUpperCase() }}</span>
        </a>
    </div>
    <glossary-term-list :firstLetter="firstLetter" @term-clicked="onTermClicked"></glossary-term-list>
  </div>
</template>

<script>
import GlossaryTermList from './GlossaryTermList'

export default {
  components: {
    GlossaryTermList
  },
  data() {
    return {
      alpha: this.generateAlphaArray(),
      firstLetter: 'a'
    }
  },
  methods: {
    generateAlphaArray() {
      var alpha = [], i = 'a'.charCodeAt(0), j = 'z'.charCodeAt(0)
      for (i; i <= j; ++i) {
          alpha.push(String.fromCharCode(i))
      }
      return alpha
    },
    onClick(letter) {
      console.log(letter)
      this.firstLetter = letter
    },
    onTermClicked(term) {
      this.$emit('term-selected', term.value)
    }
  }
}

</script>

<style>
#glossary-terms .letter {
  cursor: default;
}
</style>
