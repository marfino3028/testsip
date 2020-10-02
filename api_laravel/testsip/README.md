### Register
## http://localhost:8000/api/register
#  {
    "token":
    }
### Login
## http://localhost:8000/api/login
#  {
    "token":
    }

### Post Create
## http://localhost:8000/api/posts
# Authorization header
# 'headers' => [
    'Accept' => 'application/json',
    'Authorization' => 'Bearer '. $accessToken,
   ]
### Post List Api
## http://localhost:8000/api/posts
# {
    "success": true,
    "data":[
        {
            "id": 1,
            "user_id": 1,
            "title": "hello",
            "description": "testing",
            "created_at": "",
            "updated_at": "",

        }
    ]
}

### Show Single Post
## http://localhost:8000/api/posts/{id}
#  ```{
    "success": true,
    "data":[
        {
            "id": 1,
            "user_id": 1,
            "title": "hello",
            "description": "testing",
            "created_at": "",
            "updated_at": "",

        }
    ]
}```

### Post Update 
## http://localhost:8000/api/posts/{id}
# {
    "success": true
}

### Post Delete
## http://localhost:8000/api/posts/{id}
# {
    "success": true
}