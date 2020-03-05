import numpy as np
import matplotlib.pyplot as plt
import pandas as pd



dataset = pd.read_csv('aadata.csv')
X = dataset.iloc[:, 0:17].values
y = dataset.iloc[:, 17].values

print(dataset)




from sklearn.preprocessing import LabelEncoder, OneHotEncoder
labelencoder_X_1 = LabelEncoder()
X[:, 8] = labelencoder_X_1.fit_transform(X[:, 8])
labelencoder_X_2 = LabelEncoder()
X[:, 9] = labelencoder_X_2.fit_transform(X[:, 9])
labelencoder_X_3 = LabelEncoder()
X[:, 10] = labelencoder_X_3.fit_transform(X[:, 10])
labelencoder_X_4 = LabelEncoder()
X[:, 11] = labelencoder_X_4.fit_transform(X[:, 11])
labelencoder_X_5 = LabelEncoder()
X[:, 12] = labelencoder_X_5.fit_transform(X[:, 12])
labelencoder_X_6 = LabelEncoder()
X[:, 13] = labelencoder_X_6.fit_transform(X[:, 13])
labelencoder_X_7 = LabelEncoder()
X[:, 14] = labelencoder_X_7.fit_transform(X[:, 14])
labelencoder_X_8 = LabelEncoder()
X[:, 15] = labelencoder_X_8.fit_transform(X[:, 15])
labelencoder_X_9 = LabelEncoder()
X[:, 16] = labelencoder_X_9.fit_transform(X[:, 16])
onehotencoder1 = OneHotEncoder(categorical_features = [10,11,12,13])
X = onehotencoder1.fit_transform(X).toarray()



# Splitting the dataset into the Training set and Test set
from sklearn.model_selection import train_test_split
X_train, X_test, y_train, y_test = train_test_split(X, y, test_size = 0.2, random_state = 0,shuffle=True)

# Feature Scaling
from sklearn.preprocessing import StandardScaler
sc = StandardScaler()
X_train = sc.fit_transform(X_train)
X_test = sc.transform(X_test)

print(X_train)

print(y_train)

from sklearn.svm import SVC
classifier=SVC(kernel='linear',random_state=0)

classifier.fit(X_train,y_train)


y_pred=classifier.predict(X_test)


from sklearn.metrics import accuracy_score


accy=accuracy_score(y_test,y_pred)*8

from sklearn.metrics import confusion_matrix

cm=confusion_matrix(y_test,y_pred)



