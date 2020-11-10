<template>
  <div v-if="displayCheckout">
    <div>
      <button class="closeModule" @click="closeModule"></button>
    </div>
    <div>
      <div>
        <table>
          <th>
            Name
          </th>
          <th>
            Price
          </th>
          <th>
            Amount
          </th>
          <th>
            Remove
          </th>
          <tr>
            <td>cart.title</td>
            <td>cart.price</td>
            <td>
              <input class="amount" />

              <button>
                x
              </button>
            </td>
            <td></td>
          </tr>
        </table>
      </div>
    </div>
    <div></div>
  </div>
</template>
<script>
export default {
  name: "checkout",
  props: {
    cart: {
      required: true,
    },
    displayCheckout: {
      required: true,
    },
  },

  data() {
    return {
      showWindow: true,
    };
  },

  methods: {
    closeWindow() {
      return (this.showWindow = false);
    },
    
  },
};
</script>

<style></style>
