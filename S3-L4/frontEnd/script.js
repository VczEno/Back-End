const endpoint = 'http://localhost/Back-End/S3-L4/wordpress'

async function getAllUsers () {
    let promise = await fetch(endpoint+'/wp-json/wp/v2/users' )
    let userList = await promise.json()
    console.log (userList)
    displayUsers(userList)
}
getAllUsers()

function displayUsers(userList) {
    let listone= document.querySelector('.listone')
    userList.forEach(u => {
        let userRow = document.createElement('div')
        userRow.innerHTML=`<div class="row mx-5  border border-2 p-3 border-dark">
                                <div class="col">${u.slug}</div>
                                <div class="col">${u.name}</div>     
                                <div class="col">${u.name}</div>
                                <div class="col"></div>
                            </div>
    `
        listone.appendChild(userRow)
    });
    
}