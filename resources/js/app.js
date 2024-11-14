let workers = 0;
let customers = 0;
let workersInterval;
let customersInterval;

// Function to increment workers until it reaches 135
function startWorkersCounter() {
  workersInterval = setInterval(() => {
    if (workers >= 135) {
      clearInterval(workersInterval); // Stop the interval when workers reach 135
    } else {
      workers++;
      document.getElementById('workers').innerHTML= workers
      console.log("Workers:", workers); // Log or display workers count as needed
    }
  }, 50);
}

// Function to increment customers until it reaches 100
function startCustomersCounter() {
  customersInterval = setInterval(() => {
    if (customers >= 100) {
      clearInterval(customersInterval); // Stop the interval when customers reach 100
    } else {
      customers++;
      document.getElementById('customers').innerHTML= customers
      console.log("Customers:", customers); // Log or display customers count as needed
    }
  }, 50);
}

// Start both counters
startWorkersCounter();
startCustomersCounter();