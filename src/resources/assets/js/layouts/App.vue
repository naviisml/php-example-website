<template>
    <div class="wrapper">
        <component :is="layout" v-if="layout" />
    </div>
</template>

<script>

    // Load layout components dynamically.
    const requireContext = require.context('~/layouts', false, /.*\.vue$/)

    const layouts = requireContext.keys()
    .map(file =>
        [file.replace(/(^.\/)|(\.vue$)/g, ''), requireContext(file)]
    )
    .reduce((components, [name, component]) => {
        components[name] = component.default || component
        return components
    }, {})

    export default {
        el: '.wrapper',

        data: function () {
            return {
                layout: null,
                defaultLayout: 'default'
            }
        },

        methods: {
            setLayout ( layout ) {
                if ( !layout || !layouts[ layout ] ) {
                    layout = this.defaultLayout
                }

                this.layout = layouts[ layout ]
            }
        }
    }
</script>