#!/usr/bin/env python3

from flask import Flask, render_template, url_for, redirect, request, g


__author__ = "mmarconm"
__version__ = "1.0.0"

def create_app():

    app = Flask(__name__, instance_relative_config=True)
    app.config.from_object("config.settings")
    app.config.from_pyfile("settings.py", silent=True)

    from apps.models import db, User
    db.init_app(app)

    @app.before_request
    def before_request():
        g.me = None
        db.create_all()


    @app.route('/about')
    def about():
        return render_template('about.html')


    @app.route('/')
    def index():
        return render_template('blog.html')


    @app.route('/', methods=["POST"])
    def blog():
        if request.method == "POST":
            username = request.form["username"]
            title = request.form["title"]
            email = request.form["email"]
            content = request.form["content"]

            user = User(username, title, email, content)
            db.session.add(user)
            db.session.commit()

            return redirect(url_for("index"))

        return redirect(url_for("about"))


    @app.route("/search")
    def search_index():
        return render_template("search.html")


    @app.route("/search_post", methods=["POST"])
    def search_post():
        if request.method == "POST":
            search = request.form["search"]
            if search:
                g.me = User.query.filter_by(username=search).first()
                
                if g.me:
                    return render_template("search.html", me=g.me)

                else:
                    return render_tmplate("search.html")




        return redirect(url_for("about"))


    @app.route('/test')
    def tests():
        return app.config["HELLO"]


    return app
