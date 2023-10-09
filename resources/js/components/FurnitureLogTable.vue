<template>
    <h5>{{ furnitureParams.furniture_title }} {{ furnitureParams.colour_title }}</h5>

    <table class="table mb-5">
        <thead class="table-light">
            <tr>
                <th>ID</th>
<!--                <th>Мебель</th>-->
<!--                <th>Цвет</th>-->
                <th>Склад</th>
                <th>Прибытие</th>
                <th>Убытие</th>
            </tr>
        </thead>
        <tbody>
            <furniture-lof-table-row
                v-for="logItem in logData"
                :key="logItem.id"
                :log-item="logItem"
            ></furniture-lof-table-row>
        </tbody>
    </table>
</template>

<script>
import FurnitureLofTableRow from "./FurnitureLofTableRow.vue";
export default {
    name: "FurnitureLogTable",
    components: {
        FurnitureLofTableRow
    },
    props: {
        logData: {
            type: Array,
            required: true,
        }
    },
    data() {
        return {
            furnitureParams: [],
        }
    },
    methods: {
      getFurnitureParams() {
          this.furnitureParams = this.logData[0];
      }
    },
    mounted() {
        this.getFurnitureParams()
    }
}
</script>

<style scoped>

</style>
