<template>
  <Header />

  <h1 class="text2xl font-bold text-gray-700 my-6">
    {{ brewery.name }}
    <inertia-link :href="route('dashboard')">[Back]</inertia-link>
  </h1>
  <!-- This example requires Tailwind CSS v2.0+ -->
  <div class="flex flex-col mt-4">
    <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
      <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
        <div
          class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg"
        >
          <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
              <tr>
                <th
                  scope="col"
                  class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider"
                >
                  Name
                </th>
                <th
                  scope="col"
                  class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider"
                >
                  ABV
                </th>
                <th
                  scope="col"
                  class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider"
                >
                  Placeholder
                </th>
                <th
                  scope="col"
                  class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider"
                >
                  Placeholder
                </th>
                <th scope="col" class="relative px-6 py-3">
                  <span class="sr-only">Edit</span>
                </th>
              </tr>
            </thead>
            <tbody
              v-for="b in beers.data"
              :key="b.id"
              class="bg-white divide-y divide-gray-200"
            >
              <tr>
                <td class="py-4 whitespace-nowrap">
                  <div class="flex items-center">
                    <div class="ml-4">
                      <div class="text-sm font-medium text-gray-900">
                        {{ b.name }}
                      </div>
                    </div>
                  </div>
                </td>

                <td class="py-4 whitespace-nowrap">
                  <div class="flex items-center">
                    <div class="ml-4">
                      <div class="text-sm font-medium text-gray-900">
                        {{ b.abv }}
                      </div>
                    </div>
                  </div>
                </td>

                <td class="py-4 whitespace-nowrap">
                  <div class="flex items-center">
                    <div class="ml-4">
                      <div class="text-sm font-medium text-gray-900">
                        Placeholder
                      </div>
                    </div>
                  </div>
                </td>

                <td class="py-4 whitespace-nowrap">
                  <div class="flex items-center">
                    <div class="ml-4">
                      <div class="text-sm font-medium text-gray-900">
                        Placeholder
                      </div>
                    </div>
                  </div>
                </td>
              </tr>
              <!-- More people... -->
            </tbody>
          </table>

          <Pagination :data="beers" />
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import Header from "../components/Header.vue";
import Pagination from "../components/Pagination.vue";
export default {
  name: "Beers",
  props: {
    brewery: Object,
    beers: Object,
  },
  components: { Header, Pagination },
};
</script>

<style></style>
