import time, random
from locust import HttpUser, task, between

class FlowException(Exception):
    pass

class QuickstartUser(HttpUser):
    wait_time = between(1, 3)
    def __init__(self, *args, **kwargs):
        super().__init__(*args, **kwargs)  
        self.id_num = 4

    @task(1)
    def dashboard(self):
        self.client.get("/")

    @task(2)
    def new_post(self):
        self.client.get("/index.php?r=space%\2Fspace&cguid=e4e72610-35d6-4ab8-8be0-18489a83ee0f")
        post_responce = self.client.post('/index.php?r=space%\2Fspace&cguid=e4e72610-35d6-4ab8-8be0-18489a83ee0f', json={'id': 1, 'containerClass': 'new post'})
        if post_responce.status_code != 200:
            raise FlowException('Post is not created.')
    
    @task(2)
    def like_post(self):
        post_responce = self.client.post('/index.php?r=like%\2Flike%\2Flike&contentModel=humhub%5Cmodules%5Cpost%5Cmodels%5CPost&contentId=3')
        if post_responce.status_code != 200:
            raise FlowException('Post is not liked.')
    
    @task(1)
    def follow_user(self):
        self.client.get("/index.php?r=user%\2Fpeople") # go to people tab
        self.client.get("/index.php?r=user%\2Fprofile&cguid=8f3d6c9e-d163-4f69-b804-aea5c6ffd09a") # go to David Roberts Profile
        post_responce = self.client.post('/index.php?r=user%\2Fprofile%\2Ffollow&cguid=8f3d6c9e-d163-4f69-b804-aea5c6ffd09a') # follow David
        if post_responce.status_code != 200:
            raise FlowException('The person is not followed.')

    @task(3)
    def leave_comment(self):
        self.client.get("/index.php?r=space%\2Fspace&cguid=e4e72610-35d6-4ab8-8be0-18489a83ee0f") # go to welcome space 
        post_responce = self.client.post(f'/index.php?r=comment%2Fcomment%2Fpost', json={'id': 1, 'comment': 'new comment'})
        if post_responce.status_code != 200:
            raise FlowException('The comment is not sent.')

    @task
    def on_start(self):
        self.client.post("/index.php?r=user%\2Fauth%\2Flogin", json={"username":"amirezzati", "password":"12345"})