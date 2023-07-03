<template>
    <h1>Working</h1>
    <div>
        <multiselect v-model="selectedMechanic" id="mechanic_id" placeholder="Search mechanic" :options="mechanics"
            label="name" track-by="id" @search-change="onSearchMechanicsChange" @input="onSelectedMechanic" />
    </div>
</template>

<script>
    import Multiselect from 'vue-multiselect';


    export default {
        components: {
            Multiselect
        },
        props: {
            mechanics: {
                type: Array,
                default: () => []
            }
        },
        data() {
            return {
                selectedMechanic: undefined,
                form: this.$inertia.form({
                    mechanic_id: '',
                    // other fields
                })
            }
        },

    }
</script>
