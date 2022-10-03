<template>
    <div>
        <h3 class="text-center">Create Product</h3>
        <div class="row">
            <div class="col-md-6" style="margin: auto;padding: 30px 0px;">
                <form @submit.prevent="addProduct">
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" class="form-control" v-model="product.name">
                    </div>
                    <div class="form-group">
                        <label>Detail</label>
                        <input type="text" class="form-control" v-model="product.detail">
                    </div>
                    <button type="submit" class="btn btn-primary">Create</button>
                </form>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                product: {}
            }
        },
        methods: {
            addProduct() {

                    this.axios.post('http://staging.field.test:81/api/products', this.product)
                    // .then(response => (
                    // // this.$router.push({ name: 'home' })
                    // )).catch(err => console.log(err))
                // // .finally(() => this.loading = false)
              }
        }
    }
</script>