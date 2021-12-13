<template>
    <button :style="{background: color}" class="btn btn-danger">{{text}}</button>
</template>

<script>
import { defineComponent } from '@vue/composition-api'

export default {
    name: 'Button',
    props: {
        text: String,
        color: String,
        },
        }
</script>
