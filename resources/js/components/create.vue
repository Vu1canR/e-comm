<template>
            
            <form method="POST" action="/add" enctype="multipart/form-data">
            <!-- @submit.prevent="onSubmit()" -->
            <p >{{message}}</p>
            <p>{{data['subcategories']}}</p>
     
            
    
            <input type="hidden" name="_token" :value="csrf" />
            
            <!-- {{csrf_field()}} -->
            <label for="name"><strong>Category</strong></label>
            <select name="category_id"  @change="getCatID($event.target.value)">
                <option 
                v-for="(category, index) in categories" 
                :key="index" 
                :value="category.id"
                :name="category.name">{{category.name}}</option>
            </select>

            <label for="name"><strong>Subcategory</strong></label>
            <select name="subcategory_id" @change="getSubCatID($event.target.value)">
                <option v-for="(subcat_id, subcat_name) in data['subcategories']"
                 :key="subcat_id"
                 :value="subcat_id"
                 :name="subcat_name">{{subcat_name}}</option>
                 
            </select>
			<label for="name"><strong>Name</strong></label>
			<input type="text" name="name" autocomplete="on">
			<!-- <label for="model"><strong>Model</strong></label>
			<input type="text" name="model" autocomplete="on">
			<label for="brand"><strong>Brand</strong></label>
			<input type="text" name="brand" autocomplete="off">
			<label for="price"><strong>Price</strong></label>
            <input type="text" name="price" autocomplete="off"> -->
			<label for="description"><strong>Description</strong></label>
			<textarea name="description" rows="10"></textarea>
            <br><br>
            <label for="images"><strong>Images</strong></label>
			<input type="file" name="images[]" autocomplete="off" multiple>
            <br><br>
            <label for="keywords"><strong>Keywords</strong></label>
			<input type="text" name="keywords" autocomplete="on">
            <label for="store_code"><strong>Store code</strong></label>
			<input type="text" name="store_code" autocomplete="on">
            
            
            
            <label v-for="(spec, index) in data['specs']" :for="spec" :key="index"><strong>{{spec}}</strong>
            <input type="text" :key="index" :name="spec" autocomplete="off">
            </label>
			<button type="sumbit">Add product</button>
            
            
        </form>

    
</template>

<script>
export default {
    props: {
        categories: {
            required:true
        },
    },
    data() {
        return {
            data: {
                specs: {60: "Color", 61: "OS"},
                subcategories: {"Laptops 17\"": 4, "Laptops 15\"": 5, "Tablets 10\"": 6}
            },
            name: '',
            password: '',
            message: 'void',
            csrf: document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
            errors: {},
            message: 'Time'
        }
    },
    methods: {
        getCatID(field){
            this.category_id = field
            axios({
                method: 'post',
                url: '/category/id',
                data: {
                category_id: this.category_id,
                subcategory_id: ''
                }
            })
            .then(response => this.data = response.data)
            .catch(error => console.log(error));

        },
        getSubCatID(field){
                
            axios({
                method: 'post',
                url: '/category/id',
                data: {
                category_id: this.category_id,    
                subcategory_id: field
                }
            })
            .then(response => this.data.specs = response.data.sel_cat_specs) 
            .catch(error => console.log(error));
        },

        getValue(){
            console.log('Da fuk')
        },
         onSubmit(){
            axios.post('/add', 
            {
                name: this.name,
                password :this.password,
 
            }
            )
            .then(response => this.message = response.data)
            .catch(error => this.errors = error.response.data.errors)
        },

    }
}      
</script>

<style>

</style>