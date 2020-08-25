**API Documentation**
----
* **URL**

  api/author

* **Method:**
`POST`

* **Data Params**

   name - author name 

   **Required:**
 
   `name=[string]`
* **Success Response:**
  
  Object

  * **Code:** 201 <br />
  *  **Content:** `{
                       "name": "mohamedzajith",
                       "updated_at": "2020-08-25 10:47:50",
                       "created_at": "2020-08-25 10:47:50",
                       "id": 2
                   }`

##
* **URL**

  api/article

* **Method:**
  `POST`

* **Data Params**

   author_id - author id<br>
   title - article title<br>
   url - url must be uniq<br>
   content - content

   **Required:**
 
   `author_id=[integer]`<br>
   `title=[string]`<br>
   `url=[string]`<br>
   `content=[text]`<br>
* **Success Response:**
  
  Object

  * **Code:** 201 <br />
  *  **Content:** `{
                       "author_id": "2",
                       "title": "test title",
                       "url": "/article/2",
                       "content": "its working",
                       "updated_at": "2020-08-25 10:59:15",
                       "created_at": "2020-08-25 10:59:15",
                       "id": 3
                   }`


##

* **URL**

  api/article

* **Method:**
  `GET`
* **Success Response:**
  
  Array of Object

  * **Code:** 200 <br />
  *  **Content:** `[{
                       "author_id": "2",
                       "title": "test title",
                       "url": "/article/2",
                       "content": "its working",
                       "updated_at": "2020-08-25 10:59:15",
                       "created_at": "2020-08-25 10:59:15",
                       "id": 3
                   }]`


##

* **URL**

  api/article/{id}

* **Method:**
  `GET`
  
*  **URL Params**
   
   id - `[required]` article id
  
* **Success Response:**
  
  Object

  * **Code:** 200 <br />
  *  **Content:** `{
                       "author_id": "2",
                       "title": "test title",
                       "url": "/article/2",
                       "content": "its working",
                       "updated_at": "2020-08-25 10:59:15",
                       "created_at": "2020-08-25 10:59:15",
                       "id": 3
                   }`
* **Error Response:**

  * **Code:** 404 NOT FOUND<br />
    **Content:** `{ error : "artical not found" }`
                   
##
* **URL**

  api/article/{id}

* **Method:**
  `PUT`
  
*  **URL Params**
   
   id - `[required]` article id
  
* **Data Params**
  
     author_id - author id<br>
     title - article title<br>
     url - url must be uniq<br>
     content - content
     
* **Success Response:**
  
  Object

  * **Code:** 200 <br />
  *  **Content:** `{
                       "author_id": "2",
                       "title": "test title",
                       "url": "/article/2",
                       "content": "its working",
                       "updated_at": "2020-08-25 10:59:15",
                       "created_at": "2020-08-25 10:59:15",
                       "id": 3
                   }`
* **Error Response:**

  * **Code:** 404 NOT FOUND<br />
    **Content:** `{ error : "artical not found" }`
                   
##

  api/article/{id}

* **Method:**
  `DELETE`
  
*  **URL Params**
   
   id - `[required]` article id
  
* **Success Response:**
  
  Object

  * **Code:** 200 <br />
  *  **Content:** `{
                       "author_id": "2",
                       "title": "test title",
                       "url": "/article/2",
                       "content": "its working",
                       "updated_at": "2020-08-25 10:59:15",
                       "created_at": "2020-08-25 10:59:15",
                       "id": 3
                   }`
* **Error Response:**

  * **Code:** 404 NOT FOUND<br />
    **Content:** `{ error : "artical not found" }`
                   
##

