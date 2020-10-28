<template>
    <div>
<p>
<button class="btn btn-primary" type="button">By Mass</button><button class="btn btn-success" type="button">By Volume</button><button class="btn btn-info" type="button">By Density</button><button class="btn btn-warning" type="button">Predicted Aisles</button><button class="btn btn-danger" type="button">Commit</button>
</p>
<div style="background-color: white; font-size: 13px;">
<table class="table table-bordered table-striped">
    <tr>
        <th>Sku</th>
        <th>Product Description</th>
        <th>Mass (kg)</th>
        <th>Volume (cm/3)</th>
        <th>Density (g/m3)</th>
    </tr>
    <tr>
    <td>11111</td>
    <td>1</td>
    <td>1</td>
    <td>1</td>
    <td>1</td>
    </tr>
    <tr>
    <td>11111</td>
    <td>1</td>
    <td>1</td>
    <td>1</td>
    <td>1</td>
    </tr>
    <tr>
    <td>11111</td>
    <td>1</td>
    <td>1</td>
    <td>1</td>
    <td>1</td>
    </tr>
</table>
<hr>
</div>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }

</script>
