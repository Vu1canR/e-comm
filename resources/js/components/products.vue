<template>

    <div class="items-list">
        <div v-for="(product,index) in products" :key="product.id" class="product-div">
            <a ref="productLink" :href="'/p/'+ product.store_code + '-' + product.name.replace(/ /g,'-').toLowerCase()" style="text-decoration:none; color:black;">
                <!-- <img class="item-photo" :src="'/images/' + product.sub_category_id + '/' + product.preview"> -->
                <img class="item-photo" images :src="'/images/' + product.sub_category_id + '/' + product.images.split('|')[0]">
                <ul class="specs">
                    <!-- <li>Vendor: {{product.name}}</li>
                    <li>Socket: {{product.socket}}</li>
                    <li>Chipset: {{product.chipset}}</li>
                    <li>Supported processor: {{product.supported_processors}}</li> -->
                    <li v-for="line in product.description.split('\n')" v-text="line"></li>
                </ul>
                <div class="price-cart">
                    <div class="price"><strong>{{product.price}}TJS</strong></div>
                    <div class="exp">
                        <div class="cart"><button class="to-cart" title="Add to cart" @click.stop.prevent="addItem()"><i class="fas fa-shopping-cart"></i></button></div>
                        <div class="compare-div"><button title="Add to comparison"><i class="fas fa-balance-scale"></i></button></div>
                        <!-- <div class="compare-div"><i class="fas fa-balance-scale"></i></div> -->
                        
                    </div>
                    <!-- <div class="clear"></div> -->
                </div>                    
            </a>    
        </div>
        <!-- <div><img class="item-photo" src="{{asset('images\13-144-267-V01.jpg')}}"></div>
        <div><img class="item-photo" src="{{asset('images\13-157-843-V07.jpg')}}"></div> -->
        
    </div>
 

</template>
<script>
export default {
    props: {
        products:{
            required:true
        }
    }
    ,
    data() {
        return {
            title: 'My mind hurts',
            my_products: '',
            my_message: '',
            csrf: document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
            my_array : []
        }
    },
    methods: {
        inConsole(){
            console.log(this.my_array)
        },
        
        addItem() {
            console.log('stop clicking me')

            // this.$root.$emit("addProduct", [
            //     this.product_array["store_code"],
            //     this.product_array["name"],
            //     this.quantity,
            //     this.product_array["price"]
            // ]);
            // this.$refs.productLink[index].preventDefault()

        },
        displayProducts() {
            console.log(this.my_products)
        },
        
        sendID(id){
            axios({
                method: 'post',
                url: '/c4/gpus',
                data: {
                category_id: id,    
                }
            })
            .then(response => console.log(response)) 
            .catch(error => console.log(error));
        }

    },
    mounted() {

        axios.get('/products').then(response => this.my_products = response.data);
    },
}
</script>
<style>
</style>