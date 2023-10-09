<template>
    <tr>
        <td>{{ logItem.id }}</td>
<!--        <td>{{ logItem.furniture_title }}</td>-->
<!--        <td>{{ logItem.colour_title }}</td>-->
        <td>{{ logItem.warehouse_title }}</td>
        <td>{{ new Date(logItem.arrival_date).toISOString().split('T')[0] }}</td>
        <td>{{ new Date(logItem.departure_date).toISOString().split('T')[0] }}</td>
    </tr>
</template>

<script>
export default {
    name: "FurnitureLofTableRow",
    props: {
        logItem: {
            type: Object,
            required: true,
        },
    },
}
</script>

<style scoped>

</style>
