<template>
    <div class="filter">
        <p class="lead">Параметры поиска:</p>
        <div class="row mb-3">
            <label class="col-sm-1 col-form-label">Прибытие:</label>
            <div class="col-sm-2">
                <input
                    type="date"
                    class="form-control"
                    v-model="filter.from"
                >
            </div>
            <label class="col-sm-1 col-form-label">Убытие:</label>
            <div class="col-sm-2">
                <input
                    type="date"
                    class="form-control"
                    v-model="filter.to"
                >
            </div>

            <label class="col-sm-1 col-form-label">Склад:</label>
            <div class="col-sm-2">
                <select
                    class="form-select"
                    aria-label="Склад"
                    v-model="filter.warehouse"
                >
<!--                   по-хорошему бы из БД получить список складов -->
                    <option value="0">Все</option>
                    <option value="1">Склад 1</option>
                    <option value="2">Склад 2</option>
                </select>
            </div>
            <div class="col-sm-2">
                <button
                    type="button"
                    class="btn btn-primary"
                    @click="applyFilter"
                >Применить</button>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "LogFilter",
    data() {
        return {
            filter: {
                from: '',
                to: '',
                warehouse: null,
            }
        }
    },
    methods: {
        applyFilter() {
            this.$emit('applyFilterParams', this.filter);
        }
    }
}
</script>

<style scoped>

</style>
