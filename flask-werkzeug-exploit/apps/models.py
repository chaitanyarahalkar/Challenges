from flask_sqlalchemy import SQLAlchemy


db = SQLAlchemy()


class User(db.Model):

    id = db.Column(db.Integer, primary_key=True)
    username = db.Column(db.String(80))
    email = db.Column(db.String(120))
    title = db.Column(db.String(80))
    content = db.Column(db.Text())


    def __init__(self, username, email, title, content):
        self.username = username
        self.email = email
        self.title = title
        self.content = content


    def __repr__(self):
        return "{}".format(self.username)
