import numpy as np
from sklearn.model_selection import train_test_split 
import tensorflow as tf
from tensorflow import keras
import sys

csv=np.genfromtxt("processed.cleveland.csv",delimiter=',')
X=csv[...,0:13]
X=X.reshape([-1,13])
Y=csv[...,13]
#converting all 1,2,3,4 to 1. to make binary classification 1,0 :)
for i in range(len(Y)):
	if Y[i]!=0:
		Y[i]=1


x_train,x_test,y_train,y_test=train_test_split(X,Y,test_size=0.20,random_state=42)

#neural network
model=keras.Sequential()
model.add(keras.layers.Flatten(input_shape=(13,)))
model.add(keras.layers.Dense(128,activation="relu"))
model.add(keras.layers.Dense(128,activation="relu"))
model.add(keras.layers.Dense(2,activation="softmax"))

model.compile(optimizer=tf.train.AdamOptimizer(),loss="sparse_categorical_crossentropy",metrics=['accuracy'])
for i in range(1): #epochs
	print "epoch: ",i
	model.fit(x_train,y_train,epochs=1)
	loss,acc=model.evaluate(x_test,y_test)
	print "acc: ",acc
	
print "Invalid options"
try:
	data=sys.argv[1:]
	print sys.argv
	print data
	l=[]
	if(len(data)==13):
		print "inside loop"
		for i in range(len(data)):
			print "Really",i
			l.append(float(data[i]))
		m=np.array(l)
		print l
		print m
		m=m.reshape([1,13])
		print x_train[0]
		print "after loop"
		pred=model.predict(m)
		print pred
		print "After pred"
		res=np.argmax(pred)
		print "Final"
		if(res==1):
			print "<div style='height:100%;width:100%;color:red;background-color:black;font-size:40px;'><center><br><br><br><br><br><br>You have heart disease</center></div>";
		else:
			print "<div style='height:100%;width:100%;color:green;background-color:black;font-size:40px;'><center><br><br><br><br><br><br>You don't have heart disease</center></div>";
except Exception as e:
	print e;
