<template>
      <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <router-link class="nav-link" aria-current="page" exact to="/">Home</router-link>
        </li>
          <li class="nav-item">
          <router-link class="nav-link" aria-current="page" to="/about">About</router-link>
        </li>
          <li class="nav-item">
          <router-link class="nav-link" aria-current="page" to="/contact">contact</router-link>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Note
          </a>
          <ul class="dropdown-menu">
            <li><router-link class="dropdown-item" to="/notes/create">New Note</router-link></li>
            <li><a class="dropdown-item" href="/notes/Table">Table of Note</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>
</template>

<script>
    export default {
    }
</script>
