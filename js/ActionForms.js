


/*toggle between two classes for a container div element*/
const toggleForm = () => {
    const container = document.querySelector('.container');/*the first element in the document with the class "container" is returned*/
    container.classList.toggle('active');/*when click a button it will toggle the classes*/
  };