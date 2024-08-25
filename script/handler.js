// Function to initialize event listeners
function initializeEventListeners() {
  const showContactsElement = document.querySelector('.show-contacts');
  
  if (showContactsElement) {
    showContactsElement.addEventListener('click', async () => {
      const url = "http://localhost/contact%20list%20api/api/contacts/GET.php";
      try {
        const response = await fetch(url);
        if (!response.ok) {
          throw new Error(`Response status: ${response.status}`);
        }

        const json = await response.json();
      
        const queryContent = document.querySelector('.query-content');
        queryContent.innerHTML = '';

        json.forEach(contact => {
          const contactHTML = `
            <div class="flex flex-row items-center justify-center mx-auto p-4 space-x-5 border-y-4 border-black mb-2">
              <p class="text-md text-center"><span class="font-bold">ID:</span> ${contact.id}</p>
              <h2 class="text-md text-center"><span class="font-bold">Name:</span> ${contact.name}</h2>
              <p class="text-md text-center"><span class="font-bold">Number:</span> ${contact.number}</p>
            </div>
          `;
          queryContent.innerHTML += contactHTML;
        });

      } catch (error) {
        console.error(error.message);
      }
    });
  }
}

// Run the function on page load
document.addEventListener('DOMContentLoaded', initializeEventListeners);

// WILL CONTINUE LATER
// const form = document.querySelector('.update-form');

// form.addEventListener('submit', (e) => {
//   e.preventDefault();

//   const formData = new FormData(form);
//   console.log(Object.fromEntries(formData));
// });