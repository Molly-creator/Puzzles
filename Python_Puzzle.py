#Mini puzzle ALI 18-01-2022
tree = [
    [0,0],
    [[1,0],[1,1]],
    [[2,0],[2,1]],
    [[3,0],[3,1],[3,2],[3,3]],
    [[4,0],[4,1],[4,2],[4,3]],
    [[5,0],[5,1]],
    [[6,0],[6,1],[6,2],[6,3],[6,4],[6,5]]
]

# EVEN = index als eerste is dan / is het tweede dan \\
# ONEVEN =  f+index, p+index,r+index (tellend vanaf 1)

for i in range(1, len(tree), 2):
    for j in range(0,len(tree[i]), 2):
        tree[i][j] = "/"
    for j in range(1,len(tree[i]), 2):
        tree[i][j] = "\\"

for i in range(0,len(tree), 2):
    if (i == 0):
        tree[i] = "db"
    for j in range(0,len(tree[i])):
        
        if (i == 2):
            tree[i][j] = f"f{j+1}"
        if (i == 4):
            tree[i][j] = f"p{j+1}"
        if (i== 6):
            tree[i][j] = f"r{j+1}"

# for branch in tree:
#     print(branch)

tree[0] = "      top       "
for branch in tree:
    print(branch)