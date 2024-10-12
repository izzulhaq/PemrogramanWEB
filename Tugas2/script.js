let todoList = [];
let editIndex = -1;

function addTask() {
    const taskInput = document.getElementById('todo-input');
    const task = taskInput.value.trim();

    if (task === '') {
        alert("Task tidak bisa kosong");
        return;
    }

    if (editIndex >= 0) {
        todoList[editIndex] = task;
        editIndex = -1;
    } else {
        todoList.push(task);
    }

    taskInput.value = '';
    displayTasks();
}

function displayTasks() {
    const todoListContainer = document.getElementById('todo-list');
    todoListContainer.innerHTML = '';
    todoList.forEach((task, index) => {
        const listItem = document.createElement('li');

        const taskText = document.createElement('span');
        taskText.textContent = task;

        const editButton = document.createElement('button');
        editButton.textContent = 'Edit';
        editButton.className = 'edit';
        editButton.onclick = () => editTask(index);

        const deleteButton = document.createElement('button');
        deleteButton.textContent = 'Delete';
        deleteButton.className = 'delete';
        deleteButton.onclick = () => deleteTask(index);

        listItem.appendChild(taskText);
        listItem.appendChild(editButton);
        listItem.appendChild(deleteButton);

        todoListContainer.appendChild(listItem);
    });
}

function editTask(index) {
    const taskInput = document.getElementById('todo-input');
    taskInput.value = todoList[index];
    editIndex = index;
}

function deleteTask(index) {
    todoList.splice(index, 1);
    displayTasks();
}
