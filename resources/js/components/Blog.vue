<template>
    <div>
         <main role="main">
            <section class="jumbotron text-center" style="margin: 0">
                <div class="container">
                    <h1>Blogs</h1>
                    <p class="lead text-muted">Something short and leading about the collection below—its contents, the creator, etc. Make it short and sweet, but not too short so folks don’t simply skip over it entirely.</p>
                    <p>
                        <router-link to="/" class="btn btn-primary my-2">Go to home page</router-link>
                    </p>
                </div>
            </section>
            <div class="album py-5 bg-light">
                <div class="container">
                    <div class="row">
                        <div v-for="article in articles" class="col-md-4">
                            <div class="card mb-4 shadow-sm">
                                <div class="article-card-top">
                                    {{ article.title }}
                                </div>
                                <div class="card-body">
                                    <p class="card-text">{{ article.description }}</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                        </div>
                                        <small class="text-muted">9 mins</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>

    </div>
</template>

<script>
    export default {
        name: "Blog",

        data() {
          return {
              articles: [],
              article: {
                  id: '',
                  title: '',
                  description: ''
              },
          }
        },

        created() {
            this.fetchData();
        },

        methods: {
            fetchData() {
                fetch('/api/blogs')
                    .then(res => res.json())
                    .then(res => {
                        this.articles = res;
                        console.log(this.articles);
                    })
                    .catch(err => {
                        console.log(err);
                    });
            }
        }
    }
</script>

<style scoped>

</style>
