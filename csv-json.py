import csv
import json

csv_file = "students.csv"
json_file = "students.json"

data = []

with open(csv_file, "r", encoding="utf-8") as file:
    csv_reader = csv.DictReader(file)

    for row in csv_reader:
        data.append(row)

with open(json_file, "w", encoding="utf-8") as file:
    json.dump(data, file, indent=4)

print("CSV successfully converted to JSON.")