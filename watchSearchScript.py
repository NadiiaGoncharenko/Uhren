#!/usr/bin/env python
# coding: utf-8

# In[2]:


# All libraries:
from urllib.request import urlopen
from bs4 import BeautifulSoup
import re
import csv
import pandas as pd
import datetime as dt
import requests
import mysql
import mysql.connector
import webbrowser
import time
import smtplib
import ssl
from email.message import EmailMessage

# Connect to database:
conn = mysql.connector.connect(
    host= "127.0.0.1",
    user = "watchsearch", 
    password = "watchsearch",
    database = "watchsearch"
)
cur = conn.cursor()

alerter_query = """SELECT AlerterID FROM alerter"""
cur.execute(alerter_query)
ids = cur.fetchall()

for id in ids:
    alertnr = id[0]
    # get URL for scraping
    sql_url_query = """SELECT watchurl, user_fk FROM alerter WHERE AlerterID = %s """
    cur.execute(sql_url_query, (alertnr, ))
    r = cur.fetchall()
    conn.commit()
    for x in r:
        URL = x[0]
        user = x[1]
    # scrape URL and save (only) new entries to database
    html = requests.get(URL)
    bs = BeautifulSoup(html.content, 'html.parser')
    newEntries = []
    for entry in bs.find_all('a', class_ = 'article-item block-item rcard'):
        link = entry['href']
        cur.execute("SELECT * FROM url WHERE ErgebnisURL = %s", (link, ))
        if cur.fetchone() is None:
            cur.execute("""INSERT INTO url ( ErgebnisURL, Alerter_fk, user_fk) VALUES (%s, %s, %s)""", (link, alertnr, user))
            conn.commit()
            newEntries.append(link)    
    # wenn neue url gefunden: email wird geschickt 
    if newEntries:
        # Abfragen der e-mail aus Datenbank 
        mail_query = "SELECT email FROM user WHERE userID = %s"
        cur.execute(mail_query, (user, ))
        c = cur.fetchone()
        receiver = str(c[0])
        conn.commit
        # email Verschicken
        # Define email sender and receiver
        email_sender = 'searchforchrono@gmail.com'
        email_password = 'xqmdjtzjznhviung'
        email_receiver = receiver
        # Set the subject and body of the email
        subject = 'We found something new for you!'
        body = 'Go to these links: \n' 
        for url in newEntries: 
            body += "https://www.chrono24.at" + url + '\n'
        em = EmailMessage()
        em['From'] = email_sender
        em['To'] = email_receiver
        em['Subject'] = subject
        em.set_content(body)
        # Add SSL (layer of security)
        context = ssl.create_default_context()
        # Log in and send the email
        with smtplib.SMTP_SSL('smtp.gmail.com', 465, context=context) as smtp:
            smtp.login(email_sender, email_password)
            smtp.sendmail(email_sender, email_receiver, em.as_string())
    
# End of for-loop:
conn.close()    


# In[ ]:





# In[ ]:





# 
