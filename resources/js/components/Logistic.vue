<template>
    <h3>Модуль логистики</h3>

    <log-filter @applyFilterParams="setFilterParams"></log-filter>
    <hr class="mb-5">

    <furniture-log-table
        v-if="furnitureLog.length > 0"
        v-for="(furnitureLogItem, index) in furnitureLog"
        :key="index"
        :log-data="furnitureLogItem"
    ></furniture-log-table>
</template>

<script>
import FurnitureLogTable from "./FurnitureLogTable.vue";
import LogFilter from "./LogFilter.vue";

export default {
    name: "Logistic",
    components: {
        LogFilter, FurnitureLogTable
    },
    data() {
        return {
            apiBaseUri: '/api/v1/',
            from: '',
            to: '',
            warehouse: null,
            furnitureLog: Object
        }
    },
    methods: {
        async getLogistics() {
            try {
                const response = await axios.get(this.apiBaseUri + 'availability', {
                    params: {
                        from: this.from,
                        to: this.to,
                        warehouse: this.warehouse,
                        // from: '2023-09-11',
                        // to: '2023-10-04',
                        // warehouse: null,
                    }
                })
                // console.log(Object.values(response.data))
                this.furnitureLog = Object.values(response.data)

            } catch (e) {
                console.log(e.messageerror);
            } finally {

            }
        },
        setFilterParams(filter) {
            this.from = filter.from
            this.to = filter.to
            this.warehouse = filter.warehouse

            this.getLogistics()
        }
    },
    mounted() {
        this.getLogistics()
    },
}
</script>

<style scoped>

</style>
