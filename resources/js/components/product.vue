<template>
    <div>
        <div class="top-nav">
            <div class="tpcl">
                <div class="preview-div">
                    <img
                        :src="
                            '/images/' +
                                product_array.sub_category_id +
                                '/' +
                                expandImg
                        "
                        alt="In progress"
                        class="expandImg"
                    />
                </div>
                <div class="im-div">
                    <div class="p-images-row">
                        <div
                            class="column"
                            @mouseover="imgPreview(image)"
                            v-for="(image, index) in images"
                            :key="index"
                        >
                            <img
                                class="pic-min"
                                :src="
                                    '/images/' +
                                        product_array.sub_category_id +
                                        '/' +
                                        image
                                "
                            />
                        </div>
                    </div>
                </div>
            </div>
            <div class="tpcr">
                <div>
                    <div>
                        <div>
                            <h1>{{ product_array.name }}</h1>
                        </div>
                        <div class="review"></div>
                    </div>
                    <div>
                        <div class="p-code man">
                            manu.: Sony| product code: 711719407775 / SONY|
                            store code: {{ product_array.store_code }}
                        </div>
                    </div>
                </div>
                <br />
                <div class="order-div">
                    <div class="odl">
                        <ul>
                            <li
                                class="p-spec"
                                v-for="(line, index) in desc"
                                :key="index"
                                v-text="line"
                            ></li>
                        </ul>
                    </div>
                    <div class="odr">
                        <div class="pbb-div">
                            <div class="pr-div">
                                <h1 class="price">
                                    {{ product_array.price }}TJS
                                </h1>
                            </div>
                            <div class="sb-div">
                                <div class="q-selector">
                                    <select
                                        name="quanity"
                                        v-model="quantity"
                                        @click="drdown = !drdown"
                                        @blur="drdown = false"
                                        :class="
                                            drdown ? 'is-active' : 'not-active'
                                        "
                                    >
                                        <option
                                            v-for="index in 9"
                                            :key="index"
                                            :value="index"
                                            v-text="index"
                                        ></option>
                                    </select>
                                </div>
                                <div class="add-div">
                                    <button
                                        v-if="inCart()"
                                        @click="inCart()"
                                        class="b-btn"
                                    >
                                        <a href="/cart">Move to cart</a>
                                    </button>
                                    <button
                                        v-else
                                        class="b-btn"
                                        type="submit"
                                        @click.prevent="addItem()"
                                    >
                                        Add to cart
                                    </button>
                                </div>
                                <div class="in-store">
                                    <span class="stock">In stock</span>
                                </div>
                                <div class="sh-div">
                                    <span class="shipping">Free shipping</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br />
        <div>
            <div>
                <tabs>
                    <!-- <tabs :uri="'/p/'+ product_array.store_code  + '-' + product_array.name.replace(/ /g,'-').toLowerCase()"> -->
                    <tab name="About" :selected="true">
                        <h2>Best selling console of all time</h2>
                        <!-- :class="{'is-selected': this.selected}" -->
                        <!-- <a href="#about" @click="selectTab($event)">About</a> -->
                    </tab>
                    <tab name="Specifications">
                        <h1>Specifications:</h1>
                        <table class="specs-table">
                            <tr
                                v-for="spec in product_array.specs"
                                :key="spec.id"
                            >
                                <td>{{ spec.property }}</td>
                                <td>{{ spec.pivot.value }}</td>
                            </tr>
                        </table>

                        <!-- <a href="#spec">Specifications
                        <ul class="specs">
                            <li class="spec-list"></li>
                        </ul>
                    </a> -->
                    </tab>
                    <tab name="Reviews">
                        <h2>This world is not my home</h2>
                    </tab>
                    <tab name="Comments">
                        <section class="comments">
                            <br />
                            <div>
                                <ul class="com-list">
                                    <li
                                        v-for="comment in comments"
                                        class="comments-list"
                                        :key="comment.id"
                                    >
                                        <div class="user-div">
                                            <div class="profile-pic">
                                                <img
                                                    v-if="
                                                        comment.user.picture ==
                                                            ''
                                                    "
                                                    src="/images/profile-pictures/dragon.png"
                                                    alt="picture"
                                                    height="60"
                                                    width="60"
                                                />
                                                <img
                                                    v-else
                                                    :src="
                                                        '/images/profile-pictures/' +
                                                            comment.user.picture
                                                    "
                                                    alt="picture"
                                                    height="60"
                                                    width="60"
                                                    style="border-radius: 50%;"
                                                />
                                            </div>

                                            <div class="user-name">
                                                {{ comment.user.name }}
                                            </div>
                                        </div>
                                        <div class="comment-div">
                                            <div class="datetime">
                                                {{ comment.created_at }}
                                            </div>
                                            <div class="comment-body">
                                                {{ comment.body }}
                                            </div>
                                            <div class="comment-rate"></div>
                                        </div>
                                    </li>
                                </ul>

                                <p v-if="user == null">
                                    Login to leave a comment
                                </p>
                                <form
                                    v-else
                                    :action="'/gpus/' + product_array.id"
                                    method="POST"
                                >
                                    <input
                                        type="hidden"
                                        name="_token"
                                        :value="csrf"
                                    />
                                    <textarea name="body" cols="30" rows="10">
                                    </textarea>
                                    <button class="add-comment">
                                        Add comment
                                    </button>
                                </form>
                            </div>
                        </section>
                    </tab>
                </tabs>
            </div>
            <br />
            <p v-text="images"></p>
        </div>

        <br />
    </div>
</template>
<script>
// import cart from "./cart";

export default {
    name: "product",
    // components: {
    //     cart
    // },
    props: {
        product_array: {
            // required:true
        },
        comments: {}
    },
    data() {
        return {
            cart: [],
            quantity: 1,
            drdown: false,
            bradius: "",
            images: this.product_array["images"].split("|"),
            expandImg: "",
            desc: this.product_array["description"].split("\n"),
            csrf: document
                .querySelector('meta[name="csrf-token"]')
                .getAttribute("content"),
            user: window.laravel.auth,
            tabs: [],
            selected: false,
            // my_array: [1,2,3,4],
            temp: {}
        };
    },
    methods: {
        inCart() {
            for (let i = 0; i < this.cart.length; i++) {
                if (this.cart[i].name == this.product_array["name"])
                    return true;
            }
            return false;
        },

        inConsole() {
            // console.log(this.cart)
        },
        imgPreview(image_name) {
            this.expandImg = image_name;
        },

        addItem() {
            this.$root.$emit("addProduct", {
                store_code: this.product_array["store_code"],
                name: this.product_array["name"],
                quantity: this.quantity,
                price: this.product_array["price"]
            });

            this.temp.store_code = this.product_array["store_code"];
            this.temp.name = this.product_array["name"];
            this.temp.quantity = this.quantity;
            this.temp.price = this.product_array["price"];
            this.cart.push(this.temp);
            this.temp = {};
        },

        sendProID() {
            axios({
                method: "post",
                url: "/c4/gpus/geforce-rtx-2060-super",
                data: {
                    product_id: this.product_array["id"]
                }
            })
                .then(response => console.log(response))
                .catch(error => console.log(error));
        }
    },

    created() {
        // console.log(this.product_array);
        this.expandImg = this.images[0];
    },
    computed: {
        isEmpty() {
            return this.cart.length;
        }
    },

    mounted() {
        this.tabs = document.getElementsByClassName("asrc")[0].children;
        if (localStorage.getItem("cart") != null) {
            this.cart = JSON.parse(localStorage.getItem("cart"));
        }
    },

    watch: {
        cart(val) {
            this.inCart();
        }
    }
};
</script>
<style></style>
