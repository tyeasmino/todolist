<template>
  <div class="container">
    <h3 align="center" class="mt-5">Todo List</h3>
    <div class="row mt-6"> 
      <div class="col-md-12 col-sm-12 col-lg-4">
        <div class="card text-white bg-dark mb-3" style="max-width: 18rem">
          <div class="card-header"><strong>Add Todo</strong></div>
          <div class="card-body">
            <form @submit.prevent="save" id="todoForm">
              <label class="card-title">Todo Title</label>
              <v-text-field v-model="todo.todo_name" label="Task Name" required>
              </v-text-field>
              <label class="card-title">Task Description</label>
              <v-text-field
                v-model="todo.todo_desc"
                label="Task Description"
                required
              >
              </v-text-field>
              <v-btn type="submit" form="todoForm">Save</v-btn>
            </form>
          </div>
        </div>
      </div>
      <div class="col-md-12 col-sm-12 col-lg-8">
        <v-table>
          <thead>
            <tr>
              <th>ID</th>
              <th>Task Name</th>
              <th>Task Description</th>
              <th style="min-width: 10rem">Action</th>
            </tr>
          </thead>
          <tbody>
            <tr v-for="(todo, index) in result" :key="todo.id" >
              <td>{{ index+1 }}</td>
              <td>{{ todo.todo_name }}</td>
              <td>{{ todo.todo_desc }}</td>
              <td>
                <button
                  type="button"
                  @click="edit(todo)"
                  class="  btn btn-outline-success"
                >
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pen" viewBox="0 0 16 16">
  <path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001m-.644.766a.5.5 0 0 0-.707 0L1.95 11.756l-.764 3.057 3.057-.764L14.44 3.854a.5.5 0 0 0 0-.708z"/>
</svg>
                </button>
                <button
                  type="button"
                  @click="remove(todo)"
                  class=" btn btn-outline-danger mx-2"
                >
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
  <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z"/>
  <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z"/>
</svg>
                </button>
              </td>
            </tr>
          </tbody>
        </v-table>
      </div>
    </div>
  </div>
</template>

<script>
import axios from "redaxios";
export default {
  name: "TodoList",
  data() {
    return {
      result: {},
      todo: {
        id: "",
        todo_name: "",
        todo_desc: "",
      },
    };
  },
  created() {
    this.TodoLoad();
  },
  mounted() {
    console.log("mounted() called.......");
  },

  methods: {
    TodoLoad() {
      var page = "http://127.0.0.1:8000/api/todo";
      axios.get(page).then(({ data }) => {
        console.log(data);
        this.result = data;
      });
    },

    save() {
      if (this.todo.id == "") {
        this.saveData();
      } else {
        this.updateData();
      }
    },
    saveData() {
      axios.post("http://127.0.0.1:8000/api/todo", this.todo).then(() => {
        this.TodoLoad();
        this.todo.todo_name = "";
        this.todo.todo_desc = "";
        this.id = "";
      });
    },
    edit(todo) {
      this.todo = todo;
    },
    updateData() {
      var editrecords = "http://127.0.0.1:8000/api/todo/" + this.todo.id;
      axios.put(editrecords, this.todo).then(() => {
        this.todo.todo_name = "";
        (this.todo.todo_desc = ""), (this.id = "");
        alert("Updated!!!");
        this.TodoLoad();
      });
    },

    remove(todo) {
      var url = `http://127.0.0.1:8000/api/todo/${todo.id}`;

      axios.delete(url);
      alert("Deleteddd");
      this.TodoLoad();
    },
  },
};
</script>
